let form = document.querySelector('#form');
form.addEventListener('submit',event=>{
    event.preventDefault();
    let newTask;
    form.childNodes.forEach(child =>{
        if(child.id === 'new-task-name'){
            newTask = {name:child.value};
        }
    });
    fetch('{{base}}api.v1/task',{
        method:'POST',
        body:JSON.stringify(newTask)
    }).then(res=>{
        window.location.reload();
    })
});
function done(taskId){
    let currentTask = tasks.filter(task =>{
        return task.id === taskId;
    })[0];
    currentTask.is_done = 1;
    fetch('{{base}}api.v1/task',{
        method:'UPDATE',
        body:JSON.stringify(currentTask)
    }).then(res=>{
        document.querySelector('#task-'+taskId).style.display = 'none';
    })
}