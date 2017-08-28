import React, { Component } from 'react';
import ReactMarkdown  from 'react-markdown';
import './article.css';
import README from './README.md';

export default class ArticleInfo extends Component {
  render() {
    return (
      <section>
        <ReactMarkdown
          source={README}
        />
      </section>
    );
  }
}