
function Item(props){
    // {no:1,title:"밥먹기",done:false}
    var todo=props.todo;
    return(
        <li>
            <input type='checkbox'/>
            <input type='text' value={todo.title} className="todoInput"/>
            <button>확인</button>
            <button>삭제</button>
        </li>
    );
}

export default Item;