import React, { Component } from 'react';
import Header from './components/Header';
import Footer from './components/Footer';

export default class App extends Component {
  state = {
    current: 'mail',
  }

  render() {
    return (
      <section className="container">
        <Header/>
        <Footer/>
      </section>
    );
  }
}