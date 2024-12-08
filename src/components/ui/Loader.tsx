import './loader.css'

export default function Loader() {
  return (
    <div className="flex items-center justify-center h-screen">
  <div className="flex space-x-2">
    <div className="h-8 w-2 bg-[#00723e] animate-bounce"></div>
    <div className="h-8 w-2 bg-[#00723e] animate-bounce200"></div>
    <div className="h-8 w-2 bg-[#00723e] animate-bounce400"></div>
  </div>
</div>
  )
}
