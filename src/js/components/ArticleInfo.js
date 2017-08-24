import React, { Component } from 'react';
import './article.css';

export default class ArticleInfo extends Component {
  render() {
    return (
      <section>
        <h2>文章标题</h2>
        <p>文章简介</p>
      </section>
    );
  }
}