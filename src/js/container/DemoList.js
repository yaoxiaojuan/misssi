import React, { Component } from 'react';
import { Link,Route } from 'react-router-dom';
import { demos }from '../demo/list';

export default class DemoList extends Component {
  getDemos = () => {
    let result = [];
    for(let key in demos){
      result.push(
        <li key={key}>
          <Link to={"/demo/" + key}>
            <h1>{demos[key]['title']}</h1>
          </Link>
          <p>{demos[key]['info']}</p>
        </li>
      )
    }
    return result;
  }

  render() {
    return (
      <section>
        <ul>{ this.getDemos() }</ul>
      </section>
    );
  }
}