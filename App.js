import React, {Component} from 'react';
import './App.css';
import Alert from ',/Component/Alert';

class App extends Component {
  render(){
    return (
      <div className="App container">
          <div className="alert alert-info">
            <h3 className="text-danger">Ini project Pertama React </h3>
            <p>Belajar React JS itu mudah</p>
            <button className="mir-1 btn btn-success">Setuju</button>
            <button className="btn btn-info">Iya dong!</button>
          </div>
      </div>
    );
  }
}

export default App;
