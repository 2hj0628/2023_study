import Item from "./item";

function List(props){
  var todoList=props.todoList;
  return(
      <div>
        <ul>
          {
            todoList.map(function(todo, i){
              return <Item key={i} todo={todo}/>
            })
          }
        </ul>
      </div>
  );
}

export default List;