import React, { Component } from 'react';

export default class Subjects extends Component {
    constructor(){
        super();
        this.state = {
            subjects: [],
            status: false
        };

        this.fetchSubjects = this.fetchSubjects.bind(this);


    }


    componentWillMount(){
        console.log('Subjects Will Mount');
        this.fetchSubjects();
    }

    componentDidMount(){
        console.log('Subjects Mounted');

    }



    fetchSubjects() {
        // let previousSubjects = this.state.subjects;
        let previousSubjects = 'HEllo';


        axios.get('http://localhost:8000/subjects')
            .then( (response) => {

                console.log("response = " , response.data['subjects']);

                previousSubjects = response.data['subjects'];

                console.log('previousSubjects = ' + previousSubjects);





                
                this.setState({
                    subjects: response.data['subjects'],
                    status: true
                });




            })
            .catch((error) => {
                console.log(error);
            });

    } // end fetchSubjects()




    render() {

        function Loaded(props){

            console.log('in Loaded()');
            return <h1>Loaded</h1>;

        } // end Loaded()

        function Loading(props){
            console.log('in Loading()');
            return <h2>Loading</h2>;
        } // end Loading()

        // Used to show Component on Loading
        class Show extends Component{
            constructor(props){
                super(props);
            }

            render(){

                console.log('status = ' + this.props.status);

                if (!this.props.status) {
                    return <Loading />;
                }

                return <Loaded />;

            }

        }

        return (

            <div className="form-group row">
                <label className="cols-sm-2 col-form-label">Subject:</label>
                <div className="col-sm-10">

                    <Show status={this.state.status} />





                </div>

                <button onClick={this.fetchSubjects}>Load Subjects</button>
            </div>

        );
    }
}

// return list of given subjects
function List(subjects) {
    const listItems = subjects.map((subject) =>
        <li>{subject.id}</li>
    )

    return (
        <ul>
            {listItems}
        </ul>

    );

};

class SubjectsList extends Component {
    constructor (props) {
        super(props);

    }

    componentDidMount(){
        console.log('SubjectsList Mounted = ');

    }




    render() {

        if(!this.props.status){
            return ( <h3>Loading...</h3> );

        }




        return (

            /*
            <select name="subject" id="subject">

            </select>
            */

            <List subjects={this.props.subjects}/>


        );
    }
}

/*
class SubjectsList extends Component(props){
    constructor(props){
        super(props);


    }

    List(props) {
        if (!props.status){

            return ( <span>Loading....</span> );
        }

        const subjects = this.props.subjects;
        const listItems = subjects.map((subject) =>
            <li>{subject.id}</li>
        );



        return (

            <ul name="subject_id"  id="subject_id">
                {listItems}
            </ul>

        );

    }

    render() {
        return (
            <h3>Subjects</h3>

        );
    }


}
*/