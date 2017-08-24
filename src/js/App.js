import React, { Component } from 'react';
import Header from './components/Header';
import Footer from './components/Footer';
import About from './container/About';

export default class App extends Component {
  render() {
    return (
      <section className="container">
        <Header/>
        <About/>
        <Footer/>
      </section>
    );
  }
}