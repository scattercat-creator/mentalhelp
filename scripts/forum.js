// global variables
const post = document.getElementById("post");
const postForm = document.getElementById("post-form");
const forumBox = document.getElementById("forum-box");
const forumContainer = document.getElementById("forum-container");
const subjectBar = document.getElementById("subject-bar");
const hashtag = subjectBar.querySelectorAll("span");
// const test = subjectBar.querySelector("span");
// const anchor = subjectBar.children;
// events

post.onclick = displayPostForm;
// test.onclick = () => {

// }
hashtag.onclick = () => {
    document.body.innerHTML = "hey bby";
}


// functions

function displayPostForm () {
    if (postForm.style.display == "none") {
        postForm.style.display = "block";
    } else {
        postForm.style.display = "none";
    }
}


function postStuff (array) {
    array.forEach(element => {
        let temp = forumBox.cloneNode(true);
        forumContainer.append(temp);
        temp.querySelector(".author").innerHTML = element[0];
        temp.querySelector(".forum-content").innerHTML = element[1];
        temp.querySelector(".subject").innerHTML = element[2];
    
    });
}

function chooseSubject(array) {
    let arr = [];
    for(let i = 0; i < array.length; i++) {
        for(let y = 0; y < 3; y++) {
            if (array[i][y] == anchor.innerHTML) {
                arr.push(array[i][y]);
            }
        }
    }
    document.body.innerHTML = arr;
}
// hashtag system
let hasharray = [];
category.forEach(element => {
    let node = document.createElement('span');
    subjectBar.append(node);
    node.innerHTML = element+" ";
    node.id = "hashtag";
    hasharray.push(node.innerHTML);
});

// on start
postStuff(arr);
// more events
// document.body.innerHTML = hasharray;
// subjectBar.childNodes.onclick = () => {
//     forumBox.innerHTML = "hey bby";
// }