import React, { Component } from 'react';
import logo from '../../img/logo1.png';
import './header.css';

export default class Header extends Component {
  state = {}

  render() {
    return (
      <header>
        <div className="logoBox">
          <img src={ logo } alt="LUCKY YAO"/>
          <h3>LUCKY&nbsp;YAO</h3>
          <p>作者&nbsp;<span className="highLight">要笑娟</span></p>
        </div>
        <nav>
          <ul>
            <li><a href="">最新</a></li>
            <li><a href="">标签</a></li>
            <li><a href="">关于</a></li>
          </ul>
        </nav>
      </header>
    );
  }
}