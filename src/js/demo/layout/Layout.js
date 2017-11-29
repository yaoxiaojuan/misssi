import React, { Component } from 'react';
import './layout.css';

export default class CommonLayout extends Component {
  constructor(props) {
    super(props);
    this.state = {
      num: 3
    };
  }

  getItems = () => {
    let items = [];
    for (let index = 0; index < this.state.num; index++) {
      items.push(<div key={index} className="flex-evenly-2-item h100 mb10 mr10 bgMiss"></div>)
    }
    return items;
  }

  onChange = (type) => {
    let num = this.state.num;
    switch (type) {
      case 'reduce':
        num = (num - 1) > 0 ? num - 1 : 0; 
        break;
      case 'add':
        num += 1;
        break;
      default:
        num = 3;
        break;
    }
    this.setState({ num: num})
  }

  render() {
    return (
      <div>
        <h2>布局1：间距固定，宽度自适应，两列布局</h2>
        <div className="mb10">
          <button className="bdn bgeb cMiss mr10 pl15 pr15 lh24 poi" onClick={this.onChange.bind(this, 'reduce')}>减少</button>
          <button className="bdn bgeb cMiss mr10 pl15 pr15 lh24 poi" onClick={this.onChange.bind(this, 'add')}>增加</button>
          <button className="bdn bgeb cMiss mr10 pl15 pr15 lh24 poi" onClick={this.onChange.bind(this, 'reset')}>重置</button>
        </div>
        <div className="flex-evenly-2">
          {this.getItems()}
        </div>
      </div>
    )
  }
}