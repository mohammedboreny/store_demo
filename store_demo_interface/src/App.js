import react from 'react';
import Landing from './Pages/Landing/Landing';
import Admin from './Pages/Admin/Admin';
import {
  Routes,
  Route,
  Link
} from 'react-router-dom';
function App() {
  return (
    <div className="App">
   <Routes>
                 <Route exact path='/' element={<Landing  />}></Route>
                 <Route exact path='/admin' element={<Admin  />}></Route>
          </Routes>
    </div>
  );
}

export default App;
