import React from 'react'
import { Separator } from './ui/separator'

export default function CalenderList() {

    const calenderList=[
        {
            id:1,
            date:"14/02/2024",
            title:"Simultané mondial de Blitz",
            link:"/"
        },
        {
            id:2,
            date:"11/01/2025",
            title:"Simultané mondial",
            link:"/"
        },
        {
            id:3,
            date:"15/02/2025",
            title:"Panafricains n°3",
            link:"/"
        },
        {
            id:4,
            date:"22-23/02/2025",
            title:"Couple de Gréoux & 2e étape du Grand Chelem international",
            link:"/"
        }
    ]
  return (
    <div className='bg-gray-300 absolute bottom-[-3rem]   px-16 py-6 flex flex-col'>
              {calenderList.map((calender)=>(
                <>
                <div key={calender.id} className='flex flex-row items-start justify-between'>
                <div className='w-64'>
                          <h2 className='text-3xl'>{calender.date}</h2>
                </div>
                <div className='w-[30rem]'>

                    
                    <h2 className={`font-bold ${calender.id===4 ? "text-xl w-[28rem]" : "text-3xl"}`}>{calender.title}</h2>
                </div>
                <div className='w-20'>
                    <button className='text-red-500 text-sm'>Consulter</button>
                </div>
                
          </div>
          {calender.id<4 && <Separator className='w-full mt-4 mb-4 bg-current'/>}
                </>
              ))}
      </div>
  )
}
