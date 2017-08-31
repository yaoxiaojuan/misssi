import React, { Component } from 'react';
import Tag from '../components/Tag';

export default class Tags extends Component {
  render() {
    return (
      <section>
        <Tag name="Demo" link="/demo"/>
        <Tag name="文章" link="/article"/>
      </section>
    );
  }
}