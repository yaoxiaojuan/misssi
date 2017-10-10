import React, { Component } from 'react';

export default class GameMap extends Component {
  render() {
    return (
      this.props.isEmpty === true ? <li className="boardUnit"/> :
      <li className={this.props.className + " boardUnit"}>
        <h5>8月11日（3）</h5>
        <ul>
          <li>
            <span>鸣人</span>
            <span>8</span>
          </li>
          <li>
            <span>路飞</span>
            <span>9</span>
          </li>
        </ul>
      </li>
    );
  }
}