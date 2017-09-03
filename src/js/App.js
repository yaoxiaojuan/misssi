import React, { Component } from 'react';
import { HashRouter as Router, Route } from 'react-router-dom';

import Header from './components/Header';
import Footer from './components/Footer';

import Home from './container/Home';
import About from './container/About';
import Tags from './container/Tags';
import Connect from './container/Connect';
import ArticleInfo from './container/ArticleInfo';
import ArticleList from './container/ArticleList';

import DemoList from './container/DemoList';
import GameMap from './demo/GameMap';

// TODO: 线上路由不可用bug修复
export default class App extends Component {
  render() {
    return (
      <Router>
        <section className="container">
          <Header/>
          <Route exact path="/" component={Home}/>
          <Route path="/about" component={About}/>
          <Route path="/tags" component={Tags}/>
          <Route path="/connect" component={Connect}></Route>
          <Route path="/article" exact component={ArticleList}/>
          <Route path="/article/:id" exact component={ArticleInfo}/>
          <Route path="/demo" component={DemoList}/>
          <Route path="/demo/gamemap" component={GameMap}/>
          <Footer/>
        </section>
      </Router>
    );
  }
}