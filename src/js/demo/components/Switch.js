import React, { Component } from 'react';
import './switch.css';

export default class Switch extends Component {
  getClasses = () => {
    let className = "switch";
    if(this.props.status) className += " close";
    if(this.props.loading) className += " loading";
    return className;
  };

  render() {
    return(
      <button className={this.getClasses()} onClick={this.props.onChange}>
        { this.props.close ? '关' : '开' }
        {
          this.props.loading ?
            <span className="switch__btn switch__btn_loading"></span>
          :
            <span className="switch__btn"></span>
        }
      </button>
    )
  }
}