import article20170828 from './20170828.md';
import Demo20170829 from './20170829demo/20170829.md';

export const articles = {
  20170828: {
    title: "如何使用MarkDown写博客",
    info: "简单说明本博客系统使用MD写文档的实践经验，同时写文档过程中实际用到的MD语法做简要记录",
    date: "2017-08-28 9:00PM",
    content: article20170828
  },
  'demo20170829': {
    title: "Demo：纯css做比赛对战图",
    info: "响应式，目前兼容至Chrome",
    date: "2017-08-29 8:00PM",
    content: Demo20170829
  }
}

export const articleList = (id) => {
  return articles[id].content;
}