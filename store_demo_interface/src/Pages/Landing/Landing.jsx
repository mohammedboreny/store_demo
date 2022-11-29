import React from 'react'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import Logo from '../Landing/Logo.png'
import { faBasketShopping, faCircleUser, faBars, faHeart, fas } from '@fortawesome/free-solid-svg-icons'
import ProductsCards from '../../Components/ProductsCards'
const Landing = () => {

    return (
        <div>
            <nav class="navbar navbar-expand-lg " id='navStyle'>
                <a class="navbar-brand" href="#"><img src={Logo} alt="" className=' h-50' /></a>
                <button class="navbar-toggler border " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon border"> <FontAwesomeIcon size='xl' icon={faBars} /></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto ">
                        <li class="nav-item  ">
                            <li class="nav-item dropdown ">
                                <a class="nav-link disabled dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    HOME
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </li>

                        <li class="nav-item ">
                            <li class="nav-item dropdown">
                                <a class="nav-link disabled dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    PAGES
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </li>
                        <li class="nav-item ">
                            <li class="nav-item dropdown">
                                <a class="nav-link disabled dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    SHOP
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </li>
                        <li class="nav-item">
                            <li class="nav-item dropdown">
                                <a class="nav-link  disabled dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    PRODUCT
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </li>
                        <li class="nav-item">
                            <li class="nav-item dropdown">
                                <a class="nav-link  disabled dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    BLOG
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </li>
                        <li class="nav-item">
                            <li class="nav-item dropdown">
                                <a class="nav-link  disabled dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    MY ACCOUNT
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </li>
                    </ul>
                    <ul className='pt-2 d-flex justify-content-around '>
                        <li class=" nav-item my-1 btn position-relative" >
                            <FontAwesomeIcon size='xl' icon={faBasketShopping} mask={fas} />
                            <span class="badge position-absolute  rounded-circle badge-notification text-white">1  </span>
                        </li>
                        <li class="nav-item my-1  btn position-relative ">
                            <FontAwesomeIcon size='xl' icon={faHeart} />
                            <span class="badge position-absolute  rounded-circle badge-notification text-white ">1  </span>
                        </li>
                        <li class="nav-item my-1 btn position-relative ">

                            <FontAwesomeIcon size='xl' icon={faCircleUser} />
                            <span class="badge position-absolute  rounded-circle badge-notification text-white">1  </span>

                        </li>
                    </ul>


                </div>
            </nav>
<ProductsCards/>
        </div>
    )
}

export default Landing