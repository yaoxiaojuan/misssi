import React, { Component } from 'react';

export default class Header extends Component {
  state = {}

  render() {
    return (
      <header>
        <div className="logoBox">
          <img src="../src/img/logo.png" alt="LUCKY YAO"/>
          <h1>LUCKYYAO</h1>
          <p>作者&nbsp;<span className="highLight">要笑娟</span></p>
        </div>
        <nav>
          <ul>
            <li>最新</li>
            <li>标签</li>
            <li>关于</li>
          </ul>
        </nav>
      </header>
    );
  }
}