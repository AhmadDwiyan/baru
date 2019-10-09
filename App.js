import React, {Component} from 'react';
import './App.css';
import Alert from './Components/Alert';
// import alert yang telah dibuat

class App extends Component {
  render(){
    return (
      <div className="App container col-sm-6">
          <Alert />
          <Alert />
          <Alert />
      </div>
    );
  }
}

export default App;
