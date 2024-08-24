import logo from './logo.svg';
import './App.css';
import Name from './component/Name/Name';
import Section from './component/Section/Section';
import Description from './component/Description/Description';

function App() {
  const userInformation = {
    firstName: "Mark Lester",
    lastName: "Salonga ",
    section: "BSIT-3A",
    description: "a student from Dr. Yanga's College"
  }
  return (
    <div className="App">
      <Name firstName={userInformation.firstName} lastName={userInformation.lastName}/>
      <Section section={userInformation.section}/>
      <Description description={userInformation.description}/>
    </div>
  );
}

export default App;
