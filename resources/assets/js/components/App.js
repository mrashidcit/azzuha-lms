import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Quiz from './quiz/Quiz';
import Subjects from './quiz/Subjects';


export default class App extends Component {
    constructor(props){
        super(props)


    }

    render() {
        return (

            <div >
                <Subjects />
            </div>

        );
    }
}



ReactDOM.render(
    <div>
        <App />

    </div>
    ,
    document.getElementById('app-quiz')
);

/*

 if (document.getElementById('example')) {
 ReactDOM.render(
 <Example />,
 document.getElementById('example')
 );
 }
 */