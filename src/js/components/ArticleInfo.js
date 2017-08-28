import React, { Component } from 'react';
import ReactMarkdown  from 'react-markdown';
import { articleList } from '../article/articleList';
import './article.css';


export default class ArticleInfo extends Component {
  render() {
    return (
      <section>
        <ReactMarkdown
          source={ articleList(this.props.match.params.id) }
        />
      </section>
    );
  }
}