import React, { Component } from 'react';
import GameMapUnit from './GameMapUnit';
import './GameMap.css';


export default class GameMap extends Component {
  render() {
    return (
      <section className="flex">
        <section className="boardBox first">
          <h4>第一回合</h4>
          <ul className="flex">
            <GameMapUnit/>
            <GameMapUnit className="up"/>
            <GameMapUnit/>
            <GameMapUnit className="up"/>
          </ul>
        </section>
        <section className="boardBox second">
          <h4>第二回合</h4>
          <ul className="flex">
            <GameMapUnit/>
            <GameMapUnit isEmpty={true}/>
            <GameMapUnit className="up"/>
          </ul>
        </section>
        <section className="boardBox third last">
          <h4>第三回合</h4>
          <ul className="flex">
            <GameMapUnit/>
          </ul>
        </section>
      </section>
    );
  }
}