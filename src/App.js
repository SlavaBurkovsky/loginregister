import logo from './logo.svg';
import './App.css';
import Header from './Header';
import Home from './Home';
import Login from './Login';
import Register from './Register';
function App() {
  return (
    <Router>
      <div className='container'>
        <Header />
        <Routes>
          <Router path="/" element={<Home />} />
          <Router path="/login" element={<Login />} />
          <Router path="/register" element={<Register />} />
        </Routes>
      </div>
    </Router>
  );
}

export default App;
