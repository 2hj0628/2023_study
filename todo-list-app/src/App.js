import {useState} from "react";
import './App.css';
import List from './List';
import Input from './input';

function App() {
  const [todoList, setTodoList]=useState([
    {no:1,title:"밥먹기",done:false},
    {no:2,title:"청소하기",done:true},
    {no:3,title:"취직하기",done:false},
    {no:4,title:"여행하기",done:false}
  ]);

  function addItem(msg){
    // todoList에 바로 새 아이템을 추가할 수 없다.(상수니까)
    // todoList의 배열을 한 복제해서 새 todo 아이템을 추가한다.
    // 그리고 복제된 새 배열을 setTodoList 한다.
    // 데이터를 복제할때 스프레드 연산자 사용
    var newList=[...todoList];
    newList.push({no:5,title:msg,done:false});
    setTodoList(newList);
  }

  return (
    <div className="App">
      <header className="App-header">
        <h1>Todo List v0.1</h1>
      </header>
      <Input addItem={addItem}/>
      <hr/>
      <List todoList={todoList}/>
    </div>
  );
}

export default App;
