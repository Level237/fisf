import { User } from "lucide-react"
import { Button } from "./ui/button"
import logo from '../assets/logo.png'
export const HeaderSection=()=>{

    return (
        <section className='h-44 mt-[-25px] mx-12 relative   flex flex-row justify-between items-center'>
        <div className='w-[50%] '>
            <img className='w-52 h-full' src={logo} alt="" />
        </div>
        <div className='w-[50%] flex flex-row justify-end items-center'>
           
        <Button className='ml-2 text-sm border rounded-full border-[#107a5f]'>Connexion <User className='fill-current w-8 h-8'/></Button>
        </div>
        
</section>
    )
}