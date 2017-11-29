import React from 'react';
import ReactDOM from 'react-dom';
import '../css/basic.css';
import '../css/zxx.lib.css';
import App from './App';
import registerServiceWorker from './registerServiceWorker';

ReactDOM.render(<App />, document.getElementById('root'));
registerServiceWorker();
