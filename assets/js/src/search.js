'use strict';

import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import el from 'elasticlunr';

const POSTS = require('../../../_site/posts.json');

// Add the search command and handling function
var index = el(function() {
  this.addField('title', { boost: 10 });
  this.addField('content', { boost: 5 });
  this.addField('category');
});

POSTS.forEach(post => index.addDoc(Object.values(post)[0]));

class Posts extends Component {
  constructor(props) {
    super(props);

    this.state = {
      posts: []
    };

    const mainContainer = document.querySelector('.container--main');
    const openCtrl = document.getElementById('button-search');
    const closeCtrl = document.getElementById('button-search-close');
    const searchContainer = document.querySelector('.search');
  
    function openSearch() {
      mainContainer.classList.add('container__main--overlay');
      closeCtrl.classList.remove('button--hidden');
      searchContainer.classList.add('search--open');
      setTimeout(function() {
        document.getElementById('search__input').focus();
      }, 500);
    }
    
    function closeSearch() {
      mainContainer.classList.remove('container__main--overlay');
      closeCtrl.classList.add('button--hidden');
      searchContainer.classList.remove('search--open');
      document.getElementById('search__input').blur();
      document.getElementById('search__input').value = '';
    }
  
    openCtrl.addEventListener('click', openSearch);
    closeCtrl.addEventListener('click', closeSearch);
  
    document.addEventListener('keyup', function(ev) {
      if (ev.keyCode === 27) {
        closeSearch();
      }
    });
  }

  onKeyPress(event) {
    if (event.which === 13) {
      event.preventDefault();
    }
  }

  searchPosts() {
    let posts = [];
    var filter = document.getElementById('search__input').value;
    // Hit the search index if the length of the query is long enough
    if (filter.length >= 3) {

      const results = index.search(filter);
      posts = results.map((result) => {
        return Object.values(POSTS[--result.ref])[0];
      });
    }
    this.setState({posts});
  }

  render() {
    const { posts } = this.state;
    document.querySelector('.search__related').style.display = posts.length ? 'none' : 'block';
    return (
      <form className="search__form" action="">
        <input id="search__input" className="search__input" name="search" type="search" placeholder="Find..." autoComplete="off" autoCorrect="off" autoCapitalize="off" spellCheck="false" onChange={this.searchPosts.bind(this)}/>
        <span className="search__info">Hit enter to search or ESC to close</span>
        <ul id="search__results" className="list post-list">
          {posts.map(post =>
            <li key={post.url} className="post-list__entry">
            <h4 className="post-list__entry__header">
              <a href={post.url} className="post-list__entry__header__title">
                <span>{post.title}</span>
                <span className="post-list__entry__header__subtitle">{post.subtitle}</span> 
              </a>
            </h4>
          </li>
          )}
        </ul>
      </form>
    );
  }
}

ReactDOM.render(
  <Posts/>,
  document.getElementById('search__wrapper')
);