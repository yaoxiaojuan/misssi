import React, { Component } from 'react';
import { BrowserRouter as Router, Route } from 'react-router-dom';

import Header from './components/Header';
import Footer from './components/Footer';

import Home from './container/Home';
import About from './container/About';
import Tags from './container/Tags';

export default class App extends Component {
  render() {
    return (
      <Router>
        <section className="container">
          <Header/>
          <Route exact path="/" component={Home}/>
          <Route path="/about" component={About}/>
          <Route path="/tags" component={Tags}/>
          <Footer/>
        </section>
      </Router>
    );
  }
}