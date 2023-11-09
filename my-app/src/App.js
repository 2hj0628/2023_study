import { useState } from 'react';
import './App.css';
import Hello from './Hello';
import List from './List';

// JSX 사이에 자바스크립트 문법을 사용할 때는 {}사이에 사용.
function App() {
  var titleTag=["길동 생선 가게"];
  var fishList=["오징어","꼴뚜기","대구","명태","거북이"];
  
  //리랜더링
  // state변수의 데이터가 변경되면 리액트 콤퍼넌트가 자동 랜더링 됨.
  // useState 훅 사용, 구조분해 할당 (state변수, setter함수)
  var [newItemVal,setNewItemVal]=useState("aaaa");

  return (
    <div className="App">
      <header className="App-header">
        {
          titleTag.map(function(item,i){
            return <h2 key={i}>{item}</h2>;
          })
        }
      </header>
      <Hello/>
      새 생선 : <input value={newItemVal} onChage={function (e){
        setNewItemVal(e.target.value);
      }}/> <button>추가</button><br/>
      <List fishList={fishList}/>
    </div>
  );
}

export default App;
