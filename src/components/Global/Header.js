import React, { Component } from 'react';
import PropTypes from 'prop-types';
import { Link } from 'react-router-dom';

import './css/Header.css';

class Header extends Component {
  	static propTypes = {
  		title: PropTypes.string.isRequired,
  		items: PropTypes.array.isRequired
  	};

  render() {
  	const { title, items } = this.props;

    return (
      <div className="Header">
          <h1>{title}</h1>
          <ul className="Menu">
          	{
              items && items.map(
                (item, key) => <li key={key}><Link to={ item.url }>{item.title}</Link></li>
              )
            }
          </ul>
      </div>
    );
  }
}

export default Header;
