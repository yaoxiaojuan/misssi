import React, { Component } from 'react';
import Switch from './Switch';
import Slider from './Slider';

export default class Components extends Component {
  constructor(props) {
    super(props);
    this.state = {
      switchStatus: true,
      switchLoading: true,
    };
  }

  handleSwitch = () => {
    const status = this.state.switchStatus;
    this.setState({
      switchLoading: true,
    });
    window.setTimeout(() => {
      this.setState({
        switchStatus: !status,
        switchLoading: false,
      });
    }, 1000);
  };

  render() {
    return (
      <section>
        <h3>开关按钮</h3>
        <Switch
          status={this.state.switchStatus}
          loading={this.state.switchLoading}
          onChange={this.handleSwitch}
        />
        <h3>拖动条</h3>
        <Slider/>
      </section>
    );
  }
}