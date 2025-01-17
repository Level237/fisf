
import logo from '../assets/logo.png'
import logoWhite from "../assets/logo-white.png"
import icon from "../assets/icon.png"
import { Button } from './ui/button'
import { User } from 'lucide-react'
import { initialStore } from '@/store/store'
import { Link } from 'react-router-dom'
export default function Header() {

  const openHeader=initialStore((state)=>state.openShowHeader)

  const openHeaderMobile=()=>{
    //props.open()
   openHeader()
  }
  return (
    <>
    
    <section className='h-44 max-sm:hidden mt-[-25px] mx-12 relative   flex flex-row justify-between items-center'>
            <div className='w-[50%] '>
              <Link to={'/'}><img className='w-52 h-full' src={logo} alt="" /></Link>
                
            </div>
            <div className='w-[50%] flex flex-row justify-end items-center'>
                <h2 className='text-[#107a5f] text-sm mr-2'>Suivez nous</h2>
            <img className='w-24 h-full' src={icon} alt="" />
            <Button className='ml-2 text-sm border rounded-full border-[#107a5f]'>Connexion <User className='fill-current w-8 h-8'/></Button>
            </div>
            
    </section>

    <section className='bg-[#00723e] lg:hidden border-b-[0.1px] border-white px-4 w-full h-24 flex items-center justify-between'>
    <img className='w-40' src={logoWhite} alt="" />
    <svg onClick={()=>openHeaderMobile()} className="w-7 h-7" fill="#fff" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
            </svg>
    </section>
    </>
    
  )
}
