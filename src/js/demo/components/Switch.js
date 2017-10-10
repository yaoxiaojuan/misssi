import React, { Component } from 'react';
import './switch.css';

export default class Switch extends Component {
  constructor(props) {
    super(props);
    this.state = {
      close: false
    };
  }

  handleSwitch = () => {
    const close = this.state.close;
    this.setState({
      close: !close
    })
  };

  render() {
    return(
      <button className={this.state.close ? 'switch close' : 'switch'} onClick={this.handleSwitch}>
        { this.state.close ? '关' : '开' }
      </button>
    )
  }
}