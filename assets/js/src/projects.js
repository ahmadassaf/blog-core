'use strict';

import React, { Component } from 'react';
import ReactDOM from 'react-dom';

const API = 'https://ahmadassaf-github-latest-repos-waeyxygene.now.sh';

class Projects extends Component {
  constructor(props) {
    super(props);

    this.state = {
      projects: [],
      isLoading: false,
      error: null
    };
  }

  componentDidMount() {
    this.setState({ isLoading: true });
    fetch(API)
      .then(response => {
        if (response.ok) {
          return response.json();
        } else {
          throw new Error();
        }
      })
      .then(data => this.setState({ projects: data, isLoading: false }))
      .catch(error => this.setState({ error, isLoading: false }));
  }

  render() {
    const { projects, isLoading, error } = this.state;
    
    if (error) {
      var projectsDOMElement = document.getElementById('projects');
      projectsDOMElement.parentNode.removeChild(projectsDOMElement);
    }
    if (isLoading) {
      return <div className='la-ball-beat la-dark la-2x'><div></div><div></div><div></div></div>;
    }

    return (
      <div>
        {projects.map(project =>
          <li key={project.url} className='projects__item'>
            <a target='_blank' className='projects__item__title' href={project.url}>{project.name.replace(/\-/g, ' ')}:
              <i>{project.description}</i>
            </a>
            <div className='projects__item__meta'>
              <span className='projects__item__language' style={{background:project.primaryLanguage.color}}>
                {project.primaryLanguage.name}
              </span>
            </div>
          </li>
        )}
      </div>
    );
  }
}

ReactDOM.render(
  <Projects/>,
  document.getElementById('projects__list')
);