import React, { Component } from 'react';
import './App.css';
import { Layout, Menu, Icon } from 'antd';
const SubMenu = Menu.SubMenu;
const MenuItemGroup = Menu.ItemGroup;
const { Header, Content } = Layout;

export default class App extends Component {
  state = {
    current: 'mail',
  }
  handleClick = (e) => {
    console.log('click ', e);
    this.setState({
      current: e.key,
    });
  }
  render() {
    return (
      <Layout>
        <Menu
          onClick={this.handleClick}
          selectedKeys={[this.state.current]}
          mode="horizontal"
        >
          <div className="logo">LUCKY YAO</div>
          <Menu.Item key="mail">
            <Icon type="mail" />技术
          </Menu.Item>
          <Menu.Item key="app" disabled>
            <Icon type="appstore" />小事
          </Menu.Item>
        </Menu>
        <Layout>
          <Content style={{ padding: 24, background: '#fff', minHeight: '100%' }}>
            <h1>欢迎来到LuckyYao!</h1>
            <p>Enjoy yourself!</p>
          </Content>
        </Layout>
      </Layout>
    );
  }
}