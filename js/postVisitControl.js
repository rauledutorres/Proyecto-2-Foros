function includePost(postId){
    visitedPosts = localStorage.getItem('visitedPosts');
    
    if (visitedPosts == null) {
        visitedPosts = [];
    } else {
        visitedPosts = JSON.parse(visitedPosts);
    }
    visitedPosts.push(postId);
    
    localStorage.setItem('visitedPosts', JSON.stringify(visitedPosts));
   
}

function checkVisitedPost(postId) {
    visitedPosts = localStorage.getItem('visitedPosts');

    if (visitedPosts == null) {
        visitedPosts = [];
    } else {
        visitedPosts = JSON.parse(visitedPosts);
    }

    if (visitedPosts.includes(postId)){
        return true;
    } else {
        return false;
    }
}