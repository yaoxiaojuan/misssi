import article20170828 from './20170828.md';

const articles = {
  20170828: article20170828
}

export const articleList = (id) => {
  return articles[id];
}
