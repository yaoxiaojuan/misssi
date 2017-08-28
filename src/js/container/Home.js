import React, { Component } from 'react';
import ArticleList from '../components/ArticleList';

export default class Home extends Component {
  render() {
    return (
      <section>
        <ArticleList/>
      </section>
    );
  }
}