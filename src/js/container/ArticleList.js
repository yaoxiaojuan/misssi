import React, { Component } from 'react';
import { Link } from 'react-router-dom';
import { articles }from '../article/list';

export default class ArticleList extends Component {
  getArticles = () => {
    let result = [];
    for(let key in articles){
      result.push(
        <li key={key}>
          <Link to={"/article/" + key}>
            <h1>{articles[key]['title']}</h1>
          </Link>
          <p className="f12">{articles[key]['date']}</p>
          <p>{articles[key]['info']}</p>
        </li>
      )
    }
    return result;
  }

  render() {
    return (
      <section>
        <ul>{ this.getArticles() }</ul>
      </section>
    );
  }
}