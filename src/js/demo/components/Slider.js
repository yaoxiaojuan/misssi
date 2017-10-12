import React, { Component } from 'react';
import './slider.css';

export default class Slider extends Component {
  constructor(props) {
    super(props);
    this.state = {
      close: false
    };
  }

  handleMove = (event) => {
    console.log(event);
  }

  render() {
    return(
      <div className="slider">
        <div
          className="slider_base slider--cursor-pointer slider--borderRadius-5"
          onClick={this.handleMove.bind(this)}
          onDragOver={this.handleMove}
        />
        <div className="slider_track slider--borderRadius-5"></div>
        <div className="slider_handle slider--cursor-pointer" draggable="true"></div>
      </div>
    )
  }
}