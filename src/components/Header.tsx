import React from 'react'
import logo from '../assets/logo.png'
import icon from "../assets/icon.png"
import { Button } from './ui/button'
import { User, User2 } from 'lucide-react'
export default function Header() {
  return (
    <section className='h-44 mt-[-25px] mx-12 relative   flex flex-row justify-between items-center'>
            <div className='w-[50%] '>
                <img className='w-52 h-full' src={logo} alt="" />
            </div>
            <div className='w-[50%] flex flex-row justify-end items-center'>
                <h2 className='text-[#107a5f] text-sm mr-2'>Suivez nous</h2>
            <img className='w-24 h-full' src={icon} alt="" />
            <Button className='ml-2 text-sm border rounded-full border-[#107a5f]'>Connexion <User className='fill-current w-8 h-8'/></Button>
            </div>
            
    </section>
  )
}
