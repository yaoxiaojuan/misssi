import React, { Component } from 'react';
import './connect.css';

export default class Connect extends Component {
  render() {
    return (
      <section className="connect">
        <h3>联系方式</h3>
        <ul>
          <li>Github：<a href="https://github.com/luckyYao">luckyYao</a></li>
          <li>Email：<a href="mailto:yaoxiaojuan@cloudin.cn">yaoxiaojuan@cloudin.cn</a></li>
        </ul>
      </section>
    );
  }
}