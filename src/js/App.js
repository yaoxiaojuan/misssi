import React, { Component } from 'react';
import Header from './components/Header';

export default class App extends Component {
  state = {
    current: 'mail',
  }

  render() {
    return (
      <Header/>
    );
  }
}