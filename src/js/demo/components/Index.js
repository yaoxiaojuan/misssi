import React, { Component } from 'react';
import Switch from './Switch';
import Slider from './Slider';

export default class Components extends Component {
  render() {
    return (
      <section>
        <h3>开关按钮</h3>
        <Switch/>
        <h3>拖动条</h3>
        <Slider/>
      </section>
    );
  }
}