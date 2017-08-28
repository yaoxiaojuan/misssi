import React, { Component } from 'react';
import { Link } from 'react-router-dom';
import articleList from './articleList.json';

export default class ArticleList extends Component {
  getArticles = () => {
    let articles = [];
    for(let key in articleList){
      articles.push(
        <li key={key}>
          <Link to={"/article/" + key}>
            <h1>{articleList[key]['title']}</h1>
          </Link>
          <p>{articleList[key]['info']}</p>
        </li>
      )
    }
    return articles;
  }

  render() {
    return (
      <section>
        <ul>{ this.getArticles() }</ul>
      </section>
    );
  }
}