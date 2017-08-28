import React, { Component } from 'react';
import { Link } from 'react-router-dom';

export default class ArticleList extends Component {
  render() {
    return (
      <section>
        <ul>
          <li>
            <Link to="/article/1">
              <h1>标题</h1>
            </Link>
            <p>简介</p>
          </li>
        </ul>
      </section>
    );
  }
}