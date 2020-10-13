from tkinter import *

my_root = Tk()

my_root.geometry("1000x900")
my_root.title("Android Security Tools")

my_root.minsize(900, 500)
my_root['bg'] = '#49A'



def Boundsan_window():
    top = Toplevel(my_root)
    top.geometry("1200x900")

    Boundwin_1 = Label(top, text="Boundsan", bg="red", fg="white", font=("Times", 20, "bold")).pack()

    Boundwin_2 = Label(top, text='''\n1) BoundsSanitizer  adds instrumentation to binaries to insert bounds checks around array accesses.\n''', font=("comicsans", 15, )).pack(side=TOP, anchor=W)

    Boundwin_3 = Label(top, text='''2) These checks are added if the compiler cannot prove at compile time that the access will be safe 
    and if the size of the array will be known at runtime,So that it can be checked against.\n''', font=("comicsans", 15, )).pack(side=TOP, anchor=W)

    Boundwin_4 = Label(top,text='''3) BoundSan is provided by the compiler and is enabled by default in various components throughout the platform.\n''',font=("comicsans", 15,)).pack(side=TOP, anchor=W)

    Boundwin_5 = Label(top,text='''4) Boundsan is Run Time Tool.\n''',font=("comicsans", 15,)).pack(side=TOP, anchor=W)

    Boundwin_6 = Label(top, text='''Types of Errors Caught by Boundsan ->\n''', font=("comicsans", 15,"bold"), fg="#1a66ff").pack(side=TOP, anchor=CENTER)

    err1 = Button(top, text="Out-of-bounds", font=("comicsans", 12,"bold"),  width=40, height=2,activebackground="#ff3333", command=Bound_outof).pack()

    top.mainloop()




def Bound_outof():
    top = Toplevel(my_root)
    top.geometry("1200x900")
    # top['bg'] = '#49A'
    Boundwin_title = Label(top, text="Out of bond", bg="red", fg="white", font=("Times", 20, "bold")).pack()

    Android_bpcode = Label(top, text='''Android.bp File Code ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top,width=80, height=15)
    text.insert(INSERT, '''cc_binary {
     name: "servicez2",
     srcs: [
           "index_outb.c",
          ],
     sanitize: {
     misc_undefined: ["bounds"],
     diag: {
     misc_undefined: ["bounds"],
      },
      //blacklist: "modulename_blacklist.txt"
}
''',)
    text.pack()

    run_code = Label(top, text='''How To Run ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top,width=80, height=10)
    text.insert(INSERT, '''E:\>adb root
E:\>adb shell
unknown:/ # cd system/bin
unknown:/system/bin # ./servicez2''')
    text.pack()

    top.mainloop()





def Scudo_window():
    top = Toplevel(my_root)
    top.geometry("1200x900")


    Scudowin_1 = Label(top, text="Scudo", bg="red", fg="white", font=("comicsans", 20, "bold")).pack()

    Scudowin_2 = Label(top, text='''\n1) Scudo is a dynamic user-mode memory allocator, or heap allocator, designed to be resilient against heap-related vulnerabilities.\n''', font=("comicsans", 15, )).pack(side=TOP, anchor=W)

    Scudowin_3 = Label(top, text='''2) such as heap-based buffer overflow, use after free, and double free, while maintaining performance.It provides the standard C 
    allocation and deallocation primitives (such as malloc and free),as well as theC + + primitives(such as new and delete)\n''', font=("comicsans", 15, )).pack(side=TOP, anchor=W)

    Scudowin_4 = Label(top,text='''3) Scudo is more of a mitigation than a fully fledged memory error detector like AddressSanitizer (ASan).\n''',font=("comicsans", 15,)).pack(side=TOP, anchor=W)

    Scudowin_5 = Label(top,text='''4) Scudo is Run Time Tool.\n''',font=("comicsans", 15,)).pack(side=TOP, anchor=W)

    Scudowin_6 = Label(top, text='''Types of Errors Caught by Scudo ->\n''', font=("comicsans", 15,"bold"), fg="#1a66ff").pack(side=TOP, anchor=CENTER)

    err1 = Button(top, text="Double Free", font=("comicsans", 12,"bold"),  width=40, height=2,activebackground="#ff3333", command=Scudo_doublefree).pack()
    err2 = Button(top, text="Use After Free",font=("comicsans", 12,"bold"),  width=40, height=2, activebackground="#ff3333",command=Scudo_useafterfree).pack()
    err3 = Button(top, text="Heap Based BufferOverflow",font=("comicsans", 12,"bold"),  width=40, height=2, activebackground="#ff3333",command=Scudo_heap_based).pack()
    err4 = Button(top, text="Misaligned Pointer",font=("comicsans", 12,"bold"),  width=40, height=2,activebackground="#ff3333",command=Scudo_misalignptr ).pack()
    err5 = Button(top, text="RSS limit exhausted", font=("comicsans", 12,"bold"),  width=40, height=2,activebackground="#ff3333",command=Scudo_rsslimit).pack()
    err6 = Button(top, text="Allocation type mismatch",font=("comicsans", 12,"bold"),  width=40, height=2,activebackground="#ff3333",command=Scudo_allocatemissmatch).pack()

    top.mainloop()


def Scudo_doublefree():
    top = Toplevel(my_root)
    top.geometry("1200x900")
    # top['bg'] = '#49A'
    dublefree = Label(top, text="Double Free", bg="red", fg="white", font=("Times", 20, "bold")).pack()

    Android_bpcode = Label(top, text='''Android.bp File Code ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top,width=80, height=15)
    text.insert(INSERT, '''cc_binary{
   name: "scudo_test_double_free",
   srcs: [
              "double_free.c",
          ],
   sanitize: { scudo: true, }

  }
''',)
    text.pack()

    runcode = Label(top, text='''How To Run ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top,width=80, height=10)
    text.insert(INSERT, '''E:\>adb root
E:\>adb shell
unknown:/ # cd system/bin
unknown:/system/bin # ./scudo_test_double_free''')
    text.pack()

    top.mainloop()


def Scudo_useafterfree():
    top = Toplevel(my_root)
    top.geometry("1200x900")

    dublefree = Label(top, text=" Use after free", bg="red", fg="white", font=("Times", 20, "bold")).pack()

    Android_bpcode = Label(top, text='''Android.bp File Code ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top,width=80, height=15)
    text.insert(INSERT, '''cc_binary{
     name: "scudo_test_useafter_free",
     srcs: [
                "use_after_free.c",
          ],
     sanitize: { scudo: true, }

  }

''',)
    text.pack()

    runcode = Label(top, text='''How To Run ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top,width=80, height=10)
    text.insert(INSERT, '''E:\>adb root
E:\>adb shell
unknown:/ # cd system/bin
unknown:/system/bin # ./scudo_test_useafter_free''')
    text.pack()

    top.mainloop()


def Scudo_heap_based():
    top = Toplevel(my_root)
    top.geometry("1200x900")

    Scudo_heap = Label(top, text="Heap-based buffer overflow", bg="red", fg="white", font=("Times", 20, "bold")).pack()

    Android_bpcode = Label(top, text='''Android.bp File Code ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top,width=80, height=15)
    text.insert(INSERT, '''cc_binary{
   name: "scudo_test",
   srcs: [    
            "buff_overflow1.c",
         ],
    sanitize: { scudo: true, }

}
''',)
    text.pack()

    runcode = Label(top, text='''How To Run ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top,width=80, height=10)
    text.insert(INSERT, '''E:\>adb root
E:\>adb shell
unknown:/ # cd system/bin
unknown:/system/bin # ./scudo_test''')
    text.pack()

    top.mainloop()


def Scudo_misalignptr():
    top = Toplevel(my_root)
    top.geometry("1200x900")
    # top['bg'] = '#49A'
    Scudo_missptr = Label(top, text="Misaligned pointer", bg="red", fg="white", font=("Times", 20, "bold")).pack()

    Android_bpcode = Label(top, text='''Android.bp File Code ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top,width=80, height=15)
    text.insert(INSERT, '''cc_binary{

   name: "scudo_misalign_pointer",

   srcs: [
             "misalign1.c",
           ],

   sanitize: { scudo: true, }
 

}

''',)
    text.pack()

    runcode = Label(top, text='''How To Run ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top,width=80, height=10)
    text.insert(INSERT, '''E:\>adb root
E:\>adb shell
unknown:/ # cd system/bin
unknown:/system/bin # ./scudo_misalign_pointer''')
    text.pack()

    top.mainloop()


def Scudo_rsslimit():
    top = Toplevel(my_root)
    top.geometry("1200x900")

    Scudo_rssl = Label(top, text="RSS limit exhausted", bg="red", fg="white", font=("Times", 20, "bold")).pack()

    Android_bpcode = Label(top, text='''Android.bp File Code ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top, width=80, height=15)
    text.insert(INSERT, '''cc_binary{
   name: "scudo_rss_limit",
   srcs: [
            "rss_limit.c",
         ],

    cflags: [
            "-soft_rss_limit_mb",
            ],
   sanitize: { scudo: true, }

}
''', )
    text.pack()

    runcode = Label(top, text='''How To Run ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top, width=80, height=10)
    text.insert(INSERT, '''E:\>adb root
E:\>adb shell
unknown:/ # cd system/bin
unknown:/system/bin # SCUDO_OPTIONS=soft_rss_limit_mb=1 ./scudo_rss_limit''')
    text.pack()

    top.mainloop()


def Scudo_allocatemissmatch():
    top = Toplevel(my_root)
    top.geometry("1200x900")
    Scudo_alloction = Label(top, text="Allocation type mismatch", bg="red", fg="white", font=("Times", 20, "bold")).pack()

    Android_bpcode = Label(top, text='''Android.bp File Code ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top, width=80, height=15)
    text.insert(INSERT, '''cc_binary{

     name: "scudo_allocation_type_missmatch",

     srcs: [
                 "allocation_mismatch.cpp",
           ],
     cflags: [

              "-DeallocationTypeMismatch",
              ],
     sanitize: { scudo: true, }
}

''', )
    text.pack()

    runcode = Label(top, text='''How To Run ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top, width=80, height=10)
    text.insert(INSERT, '''E:\>adb root
E:\>adb shell
unknown:/ # cd system/bin
unknown:/system/bin # DeallocationTypeMismatch=1 ./scudo_allocation_type_missmatch
''')
    text.pack()

    top.mainloop()



#ub start
def Ubsan_window():
    top = Toplevel(my_root)
    top.geometry("1200x900")

    Ub_win_1 = Label(top, text="UBsan", bg="red", fg="white", font=("Times", 20, "bold")).pack()

    Ub_win_2 = Label(top, text='''\n1) UndefinedBehaviorSanitizer (UBSan) performs compile-time instrumentation to check for various types of undefined behavior.\n''', font=("comicsans", 15, )).pack(side=TOP, anchor=W)

    Ub_win_3 = Label(top, text='''2) UBSan is capable of detecting many undefined behaviors, Android supports alignment, bool, bounds,enum, float-cast-overflow, 
    float-divide-by-zero, integer-divide-by-zero, nonnull-attribute, null, return, returns-nonnull-attribute\n''', font=("comicsans", 15, )).pack(side=TOP, anchor=W)

    Ub_win_4 = Label(top,text='''3)  while not technically an undefined behavior, is included in the sanitizer and used in many Android modules, including the 
    mediaserver components, to eliminate any latent integer-overflow vulnerabilities..\n''',font=("comicsans", 15,)).pack(side=TOP, anchor=W)

    Ub_win_5 = Label(top,text='''4) Ubsan is compile Time Tool.\n''',font=("comicsans", 15,)).pack(side=TOP, anchor=W)

    Ub_win_6 = Label(top, text='''Types of Errors Caught by Ubsan ->\n''', font=("Times", 15,"bold"), fg="#1a66ff").pack(side=TOP, anchor=CENTER)

    err1 = Button(top, text="Array out of bound ", font=("comicsans", 12,"bold"),  width=40, height=2,activebackground="#ff3333", command=Ubsan_arryout).pack()

    top.mainloop()

def Ubsan_arryout():
    top = Toplevel(my_root)
    top.geometry("1200x900")

    Ub_arr = Label(top, text="Array out of bound", bg="red", fg="white", font=("Times", 20, "bold")).pack()

    And_bp = Label(top, text='''Android.bp File Code ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top,width=80, height=26)
    text.insert(INSERT, '''cc_binary {
    cflags: ["-std=c11",
             "-Wall",
             "-Werror",
             "-O0", ],
    srcs: ["sanitizer-status.c"],

    name: "ub_arrout",

    sanitize: {
        misc_undefined: [
                        "alignment",
                        "bounds",
                        "null",
                        "unreachable",
                        "integer",
                         ],
        diag: {
            undefined : true
               },
             },
     }

''',)
    text.pack()

    runcode = Label(top, text='''How To Run ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top,width=80, height=6)
    text.insert(INSERT, '''E:\>adb root
E:\>adb shell
unknown:/ # cd system/bin
unknown:/system/bin # ./ub_arrout''')
    text.pack()

    top.mainloop()




def Hwsan_window():
    top = Toplevel(my_root)
    top.geometry("1200x900")
    # top['bg'] = '#49A'
    Shadow_win_1 = Label(top, text="HWAddressSanitizer", bg="red", fg="white", font=("Times", 20, "bold")).pack()

    Shadow_win_2 = Label(top,
                         text='''\n1) Hardware-assisted AddressSanitizer (HWASan) is a memory error detection tool similar to AddressSanitizer.\n''',
                         font=("comicsans", 15,)).pack(side=TOP, anchor=W)

    Shadow_win_3 = Label(top,
                         text='''2) HWASan uses a lot less RAM compared to ASan,which makes it suitable for whole system sanitization..\n''',
                         font=("comicsans", 15,)).pack(side=TOP, anchor=W)

    Shadow_win_4 = Label(top,
                         text='''3) HWASan is only available on Android 10 and higher, and on AArch64 hardware.\n''',
                         font=("comicsans", 15,)).pack(side=TOP, anchor=W)

    Shadow_win_5 = Label(top, text='''4) HWAddressSanitizer is Run Time Tool.\n''', font=("comicsans", 15,)).pack(side=TOP,
                                                                                                               anchor=W)

    




#shdow start
def Shadow_window():
    top = Toplevel(my_root)
    top.geometry("1200x900")
    # top['bg'] = '#49A'
    Shadow_win_1 = Label(top, text="Shadow call stack", bg="red", fg="white", font=("Times", 20, "bold")).pack()

    Shadow_win_2 = Label(top,
                   text='''\n1) ShadowCallStack (SCS) is an LLVM instrumentation mode that protects against return address overwrites (like stack buffer overflows)\n''',font=("comicsans", 15,)).pack(side=TOP, anchor=W)

    Shadow_win_3 = Label(top, text='''2) The return address is also stored on the regular stack for compatibility with unwinders.\n''',
                   font=("comicsans", 15,)).pack(side=TOP, anchor=W)

    Shadow_win_4 = Label(top, text='''3) This ensures that attacks that modify the return address on the regular stack have no effect on program control flow..\n''',
                   font=("comicsans", 15,)).pack(side=TOP, anchor=W)

    Shadow_win_5 = Label(top, text='''4) ShadowCallStack is Run Time Tool.\n''', font=("comicsans", 15,)).pack(side=TOP, anchor=W)

    Shadow_win_6 = Label(top, text='''Types of Errors Caught by ShadowCallStack ->\n''', font=("Times", 15, "bold"), fg="#1a66ff").pack(
        side=TOP, anchor=CENTER)

    err1 = Button(top, text="buffer overflows ", font=("comicsans", 12, "bold"), width=40, height=2,
                  activebackground="#ff3333", command=Shadow_buffover).pack()


def Shadow_buffover():
    top = Toplevel(my_root)
    top.geometry("1200x900")

    Sha_buf = Label(top, text="Buffer overflows", bg="red", fg="white", font=("Times", 20, "bold")).pack()

    And_bp = Label(top, text='''Android.bp File Code ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top,width=80, height=26)
    text.insert(INSERT, '''cc_binary {
    cflags: ["-std=c11",
             "-Wall",
             "-Werror",
             "-O0", ],
    srcs: ["sanitizer-status.c"],

    name: "ub_arrout",

    sanitize: {
        misc_undefined: [
                          "alignment",
                          "bounds",
                          "null",
                          "unreachable",
                          "integer",
                        ],
        diag: {
            undefined : true
           },
        },
     }

''',)
    text.pack()

    runcode = Label(top, text='''How To Run ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top,width=80, height=6)
    text.insert(INSERT, '''E:\>adb root
E:\>adb shell
unknown:/ # cd system/bin
unknown:/system/bin # ./ub_arrout''')
    text.pack()

    top.mainloop()


#Asan_start
def Asan_window():
    top = Toplevel(my_root)
    top.geometry("1200x900")

    Asan_win_1 = Label(top, text="AddressSanitizer", bg="red", fg="white", font=("comicsans", 20, "bold")).pack()

    Asan_win_2 = Label(top, text='''\n1) AddressSanitizer (ASan) is a fast compiler-based tool for detecting memory bugs in native code.\n''', font=("comicsans", 15, )).pack(side=TOP, anchor=W)

    Asan_win_3 = Label(top, text='''2) ASan runs on both 32-bit and 64-bit ARM, plus x86 and x86-64. ASan's CPU overhead is roughly 2x, 
            code size overhead is between 50% and 2x, and a large memory overhead\n''', font=("comicsans", 15, )).pack(side=TOP, anchor=W)

    Asan_win_4 = Label(top,text='''3) AddressSanitizer detects stack/global overflows in addition to heap overflows, and is fast with minimal memory overhead.\n''',font=("comicsans", 15,)).pack(side=TOP, anchor=W)

    Asan_win_5 = Label(top,text='''4) AddressSanitizer is Run Time Tool.\n''',font=("comicsans", 15,)).pack(side=TOP, anchor=W)

    Asan_win_6 = Label(top, text='''Types of Errors Caught by AddressSanitizer ->\n''', font=("comicsans", 15,"bold"), fg="#1a66ff").pack(side=TOP, anchor=CENTER)

    err1 = Button(top, text="Stack Buffer Overflow", font=("comicsans", 12,"bold"),  width=40, height=2,activebackground="#ff3333",command=Asan_Stackbuffer).pack()
    err2 = Button(top, text="Memory leak",font=("comicsans", 12,"bold"),  width=40, height=2, activebackground="#ff3333",command=Asan_memleak).pack()
    err3 = Button(top, text="Use After free",font=("comicsans", 12,"bold"),  width=40, height=2, activebackground="#ff3333",command=Asan_useafree).pack()
    err4 = Button(top, text="Use after scope",font=("comicsans", 12,"bold"),  width=40, height=2,activebackground="#ff3333",command=Asan_useascope ).pack()
    err5 = Button(top, text="Use after return", font=("comicsans", 12,"bold"),  width=40, height=2,activebackground="#ff3333",command=Asan_useareturn).pack()

    top.mainloop()


def Asan_Stackbuffer():
    top = Toplevel(my_root)
    top.geometry("1200x900")

    Asan_stbuf = Label(top, text="Stack-buffer-overflow", bg="red", fg="white", font=("Times", 20, "bold")).pack()

    And_bp = Label(top, text='''Android.bp File Code ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top, width=80, height=15)
    text.insert(INSERT, '''cc_binary {
    name: "Asanfor_stackbuffer",
     
    srcs: [ "stackout.cpp", 
           ],
    sanitize: {
        address: true,
               },
    cflags: [
        "-fsanitize=address",
           ],
      }


''', )
    text.pack()

    runcode = Label(top, text='''How To Run ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top, width=80, height=10)
    text.insert(INSERT, '''E:\>adb root
E:\>adb shell
unknown:/ # cd system/bin
unknown:/system/bin # ./Asanfor_stackbuffer

''')
    text.pack()

    top.mainloop()


def Asan_memleak():
    top = Toplevel(my_root)
    top.geometry("1200x900")

    Asan_mem = Label(top, text="Memory leak", bg="red", fg="white", font=("Times", 20, "bold")).pack()

    And_bp = Label(top, text='''Android.bp File Code ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top, width=80, height=15)
    text.insert(INSERT, '''cc_binary {
    name: "Asanfor_mem",
    srcs: [
           "memleak.c ", 
          ],
    sanitize: { address: true,
               },
 
    cflags: [
        "-fsanitize=leak",
       ],
 }
''', )
    text.pack()

    runcode = Label(top, text='''How To Run ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top, width=80, height=10)
    text.insert(INSERT, '''E:\>adb root
E:\>adb shell
unknown:/ # cd system/bin
unknown:/system/bin # ASAN_OPTIONS=detect_leaks=1 ./Asanfor_mem

''')
    text.pack()

    top.mainloop()




def Asan_useafree():
    top = Toplevel(my_root)
    top.geometry("1200x900")

    Asan_useafee = Label(top, text="Use after free", bg="red", fg="white", font=("Times", 20, "bold")).pack()

    And_bp = Label(top, text='''Android.bp File Code ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top, width=80, height=15)
    text.insert(INSERT, '''cc_binary {
    name: "Asanfor_UseAfterfree",
    srcs: [
           "useAfterfree.cpp",
           ],

    sanitize: { address: true,
              },

    cflags: [
            "-fsanitize=address",
            ],
}

''', )
    text.pack()

    runcode = Label(top, text='''How To Run ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top, width=80, height=10)
    text.insert(INSERT, '''E:\>adb root
E:\>adb shell
unknown:/ # cd system/bin
unknown:/system/bin # ./Asanfor_UseAfterfree


''')
    text.pack()

    top.mainloop()




def Asan_useascope():
    top = Toplevel(my_root)
    top.geometry("1200x900")

    Asan_useafterscope = Label(top, text="Use after Scope", bg="red", fg="white", font=("Times", 20, "bold")).pack()

    And_bp = Label(top, text='''Android.bp File Code ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top, width=80, height=15)
    text.insert(INSERT, '''cc_binary {
    name: "Asanfor_Afterscope",
 
    srcs: [
          "UseAfterscope.c",],
 
    sanitize: {
        address: true,},
 
    cflags: [
        "-fsanitize=address",
       ],
}
''', )
    text.pack()

    runcode = Label(top, text='''How To Run ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top, width=80, height=10)
    text.insert(INSERT, '''E:\>adb root
E:\>adb shell
unknown:/ # cd system/bin
unknown:/system/bin # ./Asanfor_Afterscope


''')
    text.pack()
    top.mainloop()


def Asan_useareturn():
    top = Toplevel(my_root)
    top.geometry("1200x900")

    Asan_useafreturn = Label(top, text="Use after return", bg="red", fg="white", font=("Times", 20, "bold")).pack()

    And_bp = Label(top, text='''Android.bp File Code ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top, width=80, height=15)
    text.insert(INSERT, '''
cc_binary {
    name: "Asanfor_useafterreturn",
 
    srcs: [ "UseAfterReturn.cpp",
          ],
    sanitize: {  address: true,
              },
 
    cflags: [
        "-fsanitize=address",
       ],
    }

''', )
    text.pack()

    runcode = Label(top, text='''How To Run ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top, width=80, height=10)
    text.insert(INSERT, '''cd system/bin
ASAN_OPTIONS=detect_stack_use_after_return=1 ./Asanfor_useafterreturn

''')
    text.pack()
    top.mainloop()




#intover start
def Intover_window():
    top = Toplevel(my_root)
    top.geometry("1200x900")

    Intover_win1 = Label(top, text="Integer Overflow Sanitization", bg="red", fg="white", font=("Times", 20, "bold")).pack()

    Intover_win2 = Label(top,text='''\n1) Integer Overflow Sanitization is designed to add checks around arithmetic operations/instructions which \nmight overflow—to safely abort a process if an overflow does happen.\n''',font=("comicsans", 15,)).pack(side=TOP, anchor=W)

    Intover_win3 = Label(top,text='''  2) These sanitizers can mitigate an entire class of memory corruption and information disclosure vulnerabilities\n where the root cause is an integer overflow.\n''',font=("comicsans", 15,)).pack(side=TOP, anchor=W)

    Intover_win4 = Label(top,text='''
3) Integer Overflow Sanitization is Run Time Tool.\n''', font=("comicsans", 15,)).pack(side=TOP,
                                                                                                         anchor=W)

    Intover_win5 = Label(top, text='''Types of Errors Caught by Integer Overflow Sanitization ->\n''', font=("Times", 15, "bold"),
                   fg="#1a66ff").pack(
        side=TOP, anchor=CENTER)

    err1 = Button(top, text="integer-overflow ", font=("comicsans", 12, "bold"), width=40, height=2,
                  activebackground="#ff3333", command=Intover_int).pack()
    top.mainloop()


def Intover_int():
    top = Toplevel(my_root)
    top.geometry("1200x900")
    # top['bg'] = '#49A'
    Intoverf = Label(top, text="Integer-overflow", bg="red", fg="white", font=("Times", 20, "bold")).pack()

    And_bp = Label(top, text='''Android.bp File Code ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top, width=80, height=15)
    text.insert(INSERT, '''
cc_binary{
     name: "integer_overflows",
     srcs: [
              "int_overflow.c",
           ],
     sanitize: {
      integer_overflow: true,
               },
    }

''', )
    text.pack()

    runcode = Label(top, text='''How To Run ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top, width=80, height=10)
    text.insert(INSERT, '''E:\>adb root
E:\>adb shell
unknown:/ # cd system/bin
unknown:/system/bin # ./integer_overflows

''')
    text.pack()
    top.mainloop()




#cfi start
def Cfi_window():
    top = Toplevel(my_root)
    top.geometry("1200x900")

    cfi_win_1 = Label(top, text="Control Flow Integrity", bg="red", fg="white", font=("Times", 20, "bold")).pack()

    cfi_win_2 = Label(top,text='''\n1) Most vulnerabilities are exploited by attackers changing the normal control flow of an application.\n''', font=("comicsans", 15,)).pack(side=TOP, anchor=W)

    cfi_win_3 = Label(top,text=''' 2) Control flow integrity (CFI) is a security mechanism that disallows changes to the original control \nflow graph of a compiled binary,making it significantly harder to perform such attacks.\n''',font=("comicsans", 15,)).pack(side=TOP, anchor=W)

    cfi_win_4 = Label(top, text='''3) Control Flow Integrity is Run Time Tool.\n''', font=("comicsans", 15,)).pack(side=TOP, anchor=W)

    cfi_win_5 = Label(top, text='''Types of Errors Caught by Control Flow Integrity ->\n''',
                   font=("Times", 15, "bold"),
                   fg="#1a66ff").pack(
        side=TOP, anchor=CENTER)

    err1 = Button(top, text="Cfi-derived-cast ", font=("comicsans", 12, "bold"), width=40, height=2, activebackground="#ff3333", command=CFI_derived).pack()

    err2 = Button(top, text="Cfi_nvcall ", font=("comicsans", 12, "bold"), width=40, height=2, activebackground="#ff3333", command=CFI_nvcall).pack()
    top.mainloop()




def CFI_derived():
    top = Toplevel(my_root)
    top.geometry("1200x900")

    Cfi_deriv = Label(top, text="Cfi-derived-cast", bg="red", fg="white", font=("Times", 20, "bold")).pack()

    And_bp = Label(top, text='''Android.bp File Code ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top, width=90, height=26)
    text.insert(INSERT, '''
cc_binary {
    name: "cfibinary",
    srcs: ["int_overflow_cfi.c",
           "cfi_cast_strict.cpp",
           "cfi_derived_cast.cpp",
           "cfi_icall.c",
           "cfi_nvcall.cpp",
           "cfi_unrelated_cast.cpp",
           "cfi_vcall.cpp",
    ],
 
     sanitize: {
        cfi: true,
        diag: {
            cfi: true,
              },
        blacklist: "cfi_blacklist.txt",
                 },
        cflags: [
                   "-fsanitize=cfi",
                   "-flto=thin",
                   "-fvisibility=hidden",
                ],
 }


''', )
    text.pack()

    rucode = Label(top, text='''How To Run ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top, width=90, height=6)
    text.insert(INSERT, '''E:\>adb root
E:\>adb shell
unknown:/ # cd system/bin
unknown:/system/bin # ./cfibinary

''')
    text.pack()
    top.mainloop()


def CFI_nvcall():
    top = Toplevel(my_root)
    top.geometry("1200x900")

    Cfi_nvc = Label(top, text="Cfi_nvcall", bg="red", fg="white", font=("Times", 20, "bold")).pack()

    And_bp = Label(top, text='''Android.bp File Code ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top, width=90, height=26)
    text.insert(INSERT, '''
cc_binary {
name: "cfibinary",
srcs: ["int_overflow_cfi.c",
       "cfi_cast_strict.cpp",
       "cfi_derived_cast.cpp",
       "cfi_icall.c",
       "cfi_nvcall.cpp",
       "cfi_unrelated_cast.cpp",
       "cfi_vcall.cpp",
    ],

sanitize: {
        cfi: true,
        diag: {
            cfi: true,
               },
        blacklist: "cfi_blacklist.txt",
        },
        cflags: [
          "-fsanitize=cfi",
          "-flto=thin",
          "-fvisibility=hidden",
                ],
}


''', )
    text.pack()

    runcode = Label(top, text='''How To Run ->\n''', font=("Times", 15,)).pack(side=TOP, anchor=W)

    text = Text(top, width=90, height=6)
    text.insert(INSERT, '''E:\>adb root
E:\>adb shell
unknown:/ # cd system/bin
unknown:/system/bin # .cfibinary

''')
    text.pack()
    top.mainloop()



def Ksan_window():
    top = Toplevel(my_root)
    top.geometry("1200x900")
    # top['bg'] = '#49A'
    Ksan_win_1 = Label(top, text="Kernel Address Sanitizer", bg="red", fg="white", font=("Times", 20, "bold")).pack()

    Ksan_win_2 = Label(top,
                         text='''\n1) Kernel Address Sanitizer (KASAN) helps kernel developers and testers find runtime memory-related bugs,\n such as out-of-bound read or write operations, and use-after-free issues.\n''',
                         font=("comicsans", 15,)).pack(side=TOP, anchor=W)

    Ksan_win_3 = Label(top,
                         text='''2) While KASAN isn't enabled on production builds due to its runtime performance penalties and memory usage \n increment, it is still a valuable tool for testing debug builds.\n''',
                         font=("comicsans", 15,)).pack(side=TOP, anchor=W)


    Ksan_win_5 = Label(top, text='''3) Kernel Address Sanitizer is Run Time Tool.\n''', font=("comicsans", 15,)).pack(side=TOP,
                                                                                                               anchor=W)




L1 = Label(text="Android Security Tools", bg="red", fg="white", font=("Times", 20, "bold"))

# button widget

Button_BoundsSanitizer = Button(my_root, text="BoundsSanitizer" , activebackground="#ff3333",font=("comicsans", 15, "bold"), command=Boundsan_window)

Button_HWAddressSanitizer = Button(my_root, text="HWAddressSanitizer", activebackground="#ff3333", font=("comicsans", 15, "bold"), command=Hwsan_window)

Button_Scudo = Button(my_root, text="Scudo", activebackground="#ff3333", font=("comicsans", 15, "bold"), command=Scudo_window)

Button_UBSan = Button(my_root, text="UBSan", activebackground="#ff3333", font=("comicsans", 15, "bold"), command=Ubsan_window)

Button_ShadowCallStack = Button(my_root, text="ShadowCallStack", activebackground="#ff3333", font=("comicsans", 15, "bold"), command=Shadow_window)

Button_AddressSanitizer = Button(my_root, text="AddressSanitizer", activebackground="#ff3333", font=("comicsans", 15, "bold"), command=Asan_window)

Button_Intoverflow = Button(my_root, text="Integer Overflow Sanitization", activebackground="#ff3333", font=("comicsans", 15, "bold"), command=Intover_window)

Button_CFI = Button(my_root, text="Control Flow Integrity", activebackground="#ff3333",  font=("comicsans", 15, "bold"), command=Cfi_window)

Button_Ksan = Button(my_root, text="Kernel Address Sanitizer", activebackground="#ff3333",  font=("comicsans", 15, "bold"), command=Ksan_window)

Exits = Button(my_root, text="Exit", width=20, activebackground="#ff3333",fg="red" , font=("comicsans", 15, "bold"), command= my_root.destroy)



# arranging button widgets
L1.grid(row=1, column=8)

Button_Scudo.grid(row=2, column=5, padx=25)

Button_UBSan.grid(row=2, column=10, pady=25)

Button_BoundsSanitizer.grid(row=8, column=5, padx=25)

Button_HWAddressSanitizer.grid(row=8, column=10, pady=25)

Button_ShadowCallStack.grid(row=14, column=5, padx=25)

Button_AddressSanitizer.grid(row=14, column=10, pady=25)

Button_Intoverflow.grid(row=20, column=5, padx=25)

Button_CFI.grid(row=20, column=10, pady=25)

Button_Ksan.grid(row=28, column=5, pady=25)

Exits.grid(row=28, column=10, pady=25)

my_root.mainloop()
