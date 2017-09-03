import React, { Component } from 'react';
import { Link } from 'react-router-dom';

export default class About extends Component {
  render() {
    return (
      <section>
        <h2>关于作者</h2>
        <p>我是
          <Link to={"/connect"}>
            <span className="highLight">要笑娟</span>
          </Link> 。受母亲影响，从小接触<a className="highLight" href="https://zh.wikipedia.org/zh/%E5%9F%BA%E7%9D%A3%E6%95%99">基督教</a>，现在也是耶稣的忠实追随者即基督徒O(∩_∩)O。</p>
        <p>同时，我也是一名程序媛，前端偏前。现在在<a className="highLight" href="https://www.cloudin.cn/">云英CloudIn</a>工作。</p>
        <p>我的爱好比较多，But，坚持下来的很少~~~~所以，我只能说现在的爱好是，羽毛球（技术一般，但朋友都说我打的挺好的~），看书（历史，宗教，技术相关），动漫（初级喜欢的程度）。</p>
        <img src="http://ovjyf065b.bkt.clouddn.com/lucky.JPG" alt="作者照片" width="100%"/>
        <h2>关于LUCKY&nbsp;YAO</h2>
        <p>这是一个很以自我为中心的平台，第一服务对象是我自己（奈我何？？？哈哈）。</p>
        <p>我会在这里记录我对于信仰的一些认识和思考，以及圣经话语的分享。如果您刚好对我的信仰感兴趣，那么很欢迎您常来，我很乐意跟您交流，分享。</p>
        <p>我会在这里分享一些前端技术，主要是用学习到的知识做一些Demo，会附上源码，复杂的内容也会简单说明其原理。如果您刚好对前端技术感兴趣，那么很欢迎您常来，我很乐意跟您一起学习成长。</p>
        <p>我还会在这里分享一些杂七杂八的事情，应该会和爱好有关。如果您刚好有时间，那么很欢迎您常来，我们一起唠唠嗑也是好的。</p>
        <h3>ENJOY&nbsp;YOURSELF！</h3>
      </section>
    );
  }
}