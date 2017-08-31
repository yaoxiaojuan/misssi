import React, { Component } from 'react';
import { Link } from 'react-router-dom';
import './tag.css';

export default class Tag extends Component {
  render() {
    return (
      <span className="tag">
        <Link to={this.props.link}>{ this.props.name }</Link>
      </span>
    );
  }
}